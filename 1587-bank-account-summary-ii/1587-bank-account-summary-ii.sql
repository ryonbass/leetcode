# Write your MySQL query statement below
select name , balance from Users u
join (select account , sum(amount) as balance from Transactions group by account) as t
on t.account = u.account
where balance > 10000
group by name