USE academia;

INSERT INTO atividades (descricao) VALUES ('Mapeamento de Estrelas');
INSERT INTO atividades (descricao) VALUES ('Suporte ao Windows');
INSERT INTO atividades VALUES (DEFAULT, 'Suporte ao MacOS');

DELETE FROM atividades WHERE codigo = 8
;

UPDATE atividades 
SET descricao = 'Suporte ao MacOS antes do Mavericks'
WHERE codigo = 8
;

SELECT *
FROM turmas
INNER JOIN atividades
ON turmas.atividades_codigo = atividades.codigo
WHERE turmas.data_inicial < '2021-04-01'
;

SELECT * 
FROM turmas, atividades
WHERE turmas.atividades_codigo = atividades.codigo;


select * from atividades;

