-- FUNCTION: public.get_incidents_by_district()

-- DROP FUNCTION public.get_incidents_by_district();

CREATE OR REPLACE FUNCTION public.get_incidents_by_district(
	)
    RETURNS TABLE(district text, district_count bigint) 
    LANGUAGE 'plpgsql'
    COST 100
    VOLATILE PARALLEL UNSAFE
    ROWS 1000

AS $BODY$
begin
	return query 
		
		select incident.district, count(incident.district) as district_count from incident
		group by incident.district
		order by district_count desc
		limit 10;
		
	end;
$BODY$;

ALTER FUNCTION public.get_incidents_by_district()
    OWNER TO pi;
