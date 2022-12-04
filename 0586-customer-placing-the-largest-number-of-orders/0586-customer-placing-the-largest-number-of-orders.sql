# Write your MySQL query statement below
select o.customer_number from Orders o
group by customer_number
order by count(customer_number) desc limit 1