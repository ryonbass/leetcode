# Write your MySQL query statement below
with s1 as (
    select product_id , (case when store1 is not null then "store1" end) as store, store1 as price from Products
where store1 is not null),
s2 as (
    select product_id ,(case when store2 is not null then "store2" end) as store, store2 as price from Products
where store2 is not null),
s3 as (
    select product_id ,(case when store3 is not null then "store3" end) as store, store3 as price from Products
where store3 is not null)

select product_id,store,price from s1
union 
select product_id,store,price from s2
union
select product_id,store,price from s3