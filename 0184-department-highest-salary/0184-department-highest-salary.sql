# Write your MySQL query statement below
with sub as(select name,salary ,rank() over(partition by departmentId order by salary desc) as 'rank' from Employee)
select d.name as Department, e.name as Employee, e.salary from Employee e
join Department d
on d.id = e.departmentId
join sub s
on s.name = e.name
where s.rank = 1