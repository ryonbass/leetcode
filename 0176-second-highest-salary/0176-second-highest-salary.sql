# Write your MySQL query statement below
with e as(select dense_rank() over(order by salary desc) as No,salary from Employee)
select (case when count(salary)=0 then null else salary end) as SecondHighestSalary 
from e
where No = 2