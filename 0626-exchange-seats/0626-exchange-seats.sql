# Write your MySQL query statement below
select case 
when id % 2 = 0 then id-1
when id % 2 != 0 and id = (select count(*) from Seat ) then id
else id+1 end as id , student from Seat
order by id