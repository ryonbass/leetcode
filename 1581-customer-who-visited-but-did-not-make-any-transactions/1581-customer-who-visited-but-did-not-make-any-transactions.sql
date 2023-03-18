# Write your MySQL query statement below
select customer_id,count(customer_id) as count_no_trans from Visits v
where v.visit_id not in (select distinct t.visit_id from Transactions t)
group by customer_id

