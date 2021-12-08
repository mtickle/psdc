-- FUNCTION: public.get_makes()

-- DROP FUNCTION IF EXISTS public.get_makes();

CREATE OR REPLACE FUNCTION public.get_makes(
	)
    RETURNS TABLE(make_id text, make_name text, model_id text, model_name text) 
    LANGUAGE 'plpgsql'
    COST 100
    VOLATILE PARALLEL UNSAFE
    ROWS 1000

AS $BODY$
begin
	return query 
		select
			model.make_id
            , model.make_name
            , model.model_id
            , model.make_name
		from
			model
        order by
            model.make_name DESC;
	end;
$BODY$;

ALTER FUNCTION public.get_makes()
    OWNER TO pi;
