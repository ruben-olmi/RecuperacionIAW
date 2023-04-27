use geografia;
select l.nombre as localidad,p.nombre as provincia,l.poblacion
from localidades l
join provincias p using(n_provincia)
where upper(l.nombre) like 'a%'
order by localidad;