-- FUNCTION: public.get_top_crime_codes()

-- DROP FUNCTION IF EXISTS public.get_top_crime_codes();

CREATE OR REPLACE FUNCTION public.get_top_crime_codes(
	)
    RETURNS TABLE(crime_code text, crime_description text, incident_count bigint) 
    LANGUAGE 'plpgsql'
    COST 100
    VOLATILE PARALLEL UNSAFE
    ROWS 1000

AS $BODY$
begin
	return query 

SELECT 
	incident.crime_code
	, incident.crime_description 
	, count(incident.crime_code) as incident_count
FROM
	public.incident
GROUP BY
	incident.crime_code
	, incident.crime_description 
ORDER BY
	incident_count desc
LIMIT 10;



	end;
$BODY$;

ALTER FUNCTION public.get_top_crime_codes()
    OWNER TO pi;
