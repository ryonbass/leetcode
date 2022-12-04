# Write your MySQL query statement below
select o.customer_number from Orders o
join (select customer_number,count(*) as cnt from Orders group by customer_number) a
on a.customer_number = o.customer_number
order by cnt desc limit 1