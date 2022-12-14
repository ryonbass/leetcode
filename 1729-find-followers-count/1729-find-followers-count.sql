# Write your MySQL query statement below
select user_id, sum(case when follower_id is not null then 1 end) as followers_count
from Followers
group by user_id
order by user_id