# Write your MySQL query statement below
with cnt as (
select email ,count(id) as c from Person group by email)

select Person.email as Email from Person,cnt
where Person.email = cnt.email and
c > 1
group by Person.email