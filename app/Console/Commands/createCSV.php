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
        $array = [];
        $fp = fopen(__DIR__ . 'file.csv', 'w');

        //-------------------------------------------------------------------------------------------
//        $query = DB::table('qb_raiting')
//            ->join('qb_comment', 'qb_comment.id','=', 'qb_raiting.comment_id')
//            ->join('qb_users', 'qb_users.id','=', 'qb_comment.user_id')
//            ->join('qb_products', 'qb_products.id','=', 'qb_comment.product_id')
//            ->whereRaw('qb_comment.like >= 10 and 4 < (select avg(qb_raiting.raiting) from qb_raiting where qb_raiting.comment_id = qb_comment.id) and
//              qb_users.city IN  (\'Волгоград\', \'Самара\')')
//            ->select('qb_users.name as name', 'qb_users.city as city', 'qb_comment.comment as comment' , 'qb_raiting.raiting as raiting')
//            ->get();

//-------------------------------------------------------------------------------------------
//        $query = DB::table('qb_products')
//            ->join('qb_raiting', 'qb_products.id','=', 'qb_raiting.product_id')
//            ->join('qb_comment', 'qb_products.id','=', 'qb_comment.product_id')
//            ->join('qb_users', 'qb_comment.user_id','=', 'qb_users.id')
//            ->where('qb_comment.like','>=',10)
//            ->whereRaw( '4 <= (select avg(qb_raiting.raiting) from qb_raiting where qb_users.id = qb_comment.user_id)')
//            ->orWhereRaw( '10 <= (select count(commentsCount.id)
//                            from  qb_products as productsCount
//                        inner join qb_raiting as raiting on productsCount.id = raiting.product_id
//                        inner join qb_comment as commentsCount on productsCount.id = commentsCount.product_id
//                        inner join qb_users as users on commentsCount.user_id = users.id
//                            where productsCount.price >= 3000 and users.id = qb_users.id)')
//            ->whereRaw('qb_users.city IN  (\'Волгоград\', \'Самара\')')
//            ->get();
//-------------------------------------------------------------------------------------------

        $users = DB::table('qb_raiting')
            ->join('qb_products', 'qb_products.id', '=', 'qb_raiting.product_id')
            ->join('qb_comment', 'qb_comment.id','=', 'qb_raiting.comment_id')
            ->join('qb_users', 'qb_users.id','=', 'qb_raiting.user_id')             //  более 10 отзыов
            ->whereRaw( '9 <= (select count(commentsCount.id) 
                           from  qb_raiting as raitingCount
                       inner join qb_products as productsCount on productsCount.id = raitingCount.product_id
                       inner join qb_comment as commentsCount on commentsCount.id = raitingCount.comment_id
                        inner join qb_users as users on users.id = raitingCount.user_id
                            where productsCount.price >= 3000 and users.id = qb_users.id)')
            ->select('qb_comment.id as ids' )
            ->distinct()
            ->get();

        foreach ($users as $key=>$user) {
            $array[$key] = $user->ids;
        }


        $query = DB::table('qb_raiting')
            ->join('qb_products', 'qb_products.id', '=', 'qb_raiting.product_id')
            ->join('qb_comment', 'qb_comment.id','=', 'qb_raiting.comment_id')
            ->join('qb_users', 'qb_users.id','=', 'qb_raiting.user_id')
            ->Where(function ($query) {
                $query->where('qb_comment.like','>=',10)
                    ->orwhere(function ($query) {
                        $query->whereIn('qb_comment.id', [1,2,3]);                                                           // array
                    });
            })
            ->whereRaw('qb_users.city IN  (\'Волгоград\', \'Самара\')')
            ->whereRaw( '(select avg(qb_raiting.raiting) from qb_raiting where qb_users.id = qb_comment.user_id) >= 2')            //  средняя оценка 4
            ->select('qb_users.name as name', 'qb_users.city as city', 'qb_comment.comment as comment' , 'qb_raiting.raiting as raiting')
            ->get();

//-------------------------------------------------------------------------------------------

        $title = ['Имя' , 'Город' , 'Комментарий', 'Рейтинг'];
        fputcsv($fp, (array) $title, ';', '"');

        foreach ($query as $user) {
            echo $user->name . ' - ' . $user->city  . ' - ' . $user->comment .  ' - ' . $user->raiting ."\n";
            fputcsv($fp, (array) $user, ';', '"');
        }

        fclose($fp);

    }
}
