# Write your MySQL query statement below
select name,sum(case when distance is null then 0 else distance end) as travelled_distance from Users u
left join Rides r on 
u.id = r.user_id
group by u.id
order by travelled_distance desc , name