select users.name, users.city, products.name, comments.comment, comments.`like`, raiting.raiting
from  qb_products as products
  inner join qb_raiting as raiting on products.id = raiting.product_id
  inner join qb_comment as comments on products.id = comments.product_id
  inner join qb_users as users on comments.user_id = users.id
where  10 <= comments.`like`
   and 10 <= (select count(commentsCount.id)
              from  qb_products as productsCount
                        inner join qb_raiting as raiting on productsCount.id = raiting.product_id
                        inner join qb_comment as commentsCount on productsCount.id = commentsCount.product_id
                        inner join qb_users as users on commentsCount.user_id = users.id
              where productsCount.price >= 3000 and users.id = 4)
   and 4 <= (select avg(qb_raiting.raiting) from qb_raiting where users.id = comments.user_id)
   and users.city IN  ('Волгоград', 'Самара');