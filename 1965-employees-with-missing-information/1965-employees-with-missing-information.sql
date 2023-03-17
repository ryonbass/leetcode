# Write your MySQL query statement below
with NameAndSalaries as (
select e.employee_id from Employees e
left join Salaries s on
e.employee_id = s.employee_id
where salary is null 
union 
select s.employee_id from Employees e
right join Salaries s on
e.employee_id = s.employee_id
where name is null)
select * from NameAndSalaries order by employee_id