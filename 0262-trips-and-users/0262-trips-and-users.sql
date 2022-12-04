# Write your MySQL query statement below
with cancellation as (
select request_at as day,
round(sum(case when status = 'completed' then 0 else 1 end) / count(status),2) as 'CancellationRate' from Trips t
join (select * from Users where role = 'client') as c on c.users_id = t.client_id
join (select * from Users where role = 'driver') as d on d.users_id = t.driver_id
where c.banned <> 'Yes' and d.banned <> 'Yes'
group by request_at
order by request_at)

select day ,CancellationRate as 'Cancellation Rate' from cancellation
where day between '2013-10-01' and '2013-10-03'