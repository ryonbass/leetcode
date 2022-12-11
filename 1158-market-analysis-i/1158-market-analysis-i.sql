# Write your MySQL query statement below
with order_count as(
select buyer_id ,sum(case when order_date like '2019%' then 1 else 0 end) as orders_in_2019 from Orders
group by buyer_id)

select user_id as buyer_id,join_date,(case when orders_in_2019 is null then 0 else orders_in_2019 end) as orders_in_2019  from Users u
left join order_count o
on o.buyer_id = u.user_id
