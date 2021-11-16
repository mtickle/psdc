-- FUNCTION: public.get_arrests_by_gender()

-- DROP FUNCTION public.get_arrests_by_gender();

CREATE OR REPLACE FUNCTION public.get_arrests_by_gender(
	)
    RETURNS TABLE(gender text, gender_count bigint) 
    LANGUAGE 'plpgsql'
    COST 100
    VOLATILE PARALLEL UNSAFE
    ROWS 1000

AS $BODY$
begin
	return query 
		
		select arrest.gender, count(arrest.gender) as gender_count from arrest
		group by arrest.gender
		order by gender_count desc
		limit 10;
		
	end;
$BODY$;

ALTER FUNCTION public.get_arrests_by_gender()
    OWNER TO pi;
