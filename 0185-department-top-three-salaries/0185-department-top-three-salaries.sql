# Write your MySQL query statement below
with highest as (
select name,salary,dense_rank() over(partition by departmentId order by salary desc) as 'topthree' from Employee)
select d.name as Department, e.name as Employee, e.salary from Employee e
join Department d
on d.id = e.departmentId
join highest h
on h.name = e.name
where topthree <= 3