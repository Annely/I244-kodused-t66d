CREATE TABLE annely_loomaaed (
	id integer PRIMARY KEY auto_increment,
	nimi varchar (100),
	vanus integer,
	liik varchar(100),
	puur integer,	
);

INSERT INTO annely_loomaaed VALUES 
(NULL, 'Muki', 2, 'tiiger', 1), 
(NULL, 'Pille', 100, 'madu', 2), 
(NULL, 'Pille Seenior', 101, 'madu', 3), 
(NULL, 'Villu', 27, 'kährik', 1),
(NULL, 'Musimops', 10, 'krokodill', 3);

SELECT nimi, puur FROM annely_loomaaed WHERE puur = 3;
SELECT max(vanus) min (vanus) FROM annely_loomaaed;
SELECT puur, count(*) as loomi FROM annely_loomaaed GROUP BY puur;
UPDATE annely_loomaaed SET vanus=vanus+1;
