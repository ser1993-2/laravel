<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class createCSV extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Created file';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $fp = fopen(__DIR__ . 'file.csv', 'w');

        $query = DB::table('qb_raiting')
            ->join('qb_comment', 'qb_comment.id','=', 'qb_raiting.comment_id')
            ->join('qb_users', 'qb_users.id','=', 'qb_comment.user_id')
            ->join('qb_products', 'qb_products.id','=', 'qb_comment.product_id')
            ->whereRaw('qb_comment.like >= 10 and 4 < (select avg(qb_raiting.raiting) from qb_raiting where qb_raiting.comment_id = qb_comment.id) and
              qb_users.city IN  (\'Волгоград\', \'Самара\')')
            ->select('qb_users.name as name', 'qb_users.city as city', 'qb_comment.comment as comment' , 'qb_raiting.raiting as raiting')
            ->get();

        $title = ['Имя' , 'Город' , 'Комментарий', 'Рейтинг'];
        fputcsv($fp, (array) $title, ';', '"');

        foreach ($query as $user) {
            echo $user->name . ' - ' . $user->city  . ' - ' . $user->comment .  ' - ' . $user->raiting ."\n";
            fputcsv($fp, (array) $user, ';', '"');
        }

        fclose($fp);

    }
}
