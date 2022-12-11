# Write your MySQL query statement below
with tmp as (
select actor_id,director_id,count(*) as cnt from ActorDirector
group by actor_id,director_id
)
select actor_id,director_id from tmp
where cnt >= 3