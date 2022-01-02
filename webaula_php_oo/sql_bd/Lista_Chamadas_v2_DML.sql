/* conecto ou abro o bd ou esquema */
USE lista_chamadas_v2;

/* inserir dados na tabela professores */
INSERT INTO professores (matricula, nome) VALUES (DEFAULT, "Joana D'Arc");
INSERT INTO professores (matricula, nome) VALUES (DEFAULT, 'Einstein Jones');
INSERT INTO professores (matricula, nome) VALUES (DEFAULT, 'Maria Joana Silva');
INSERT INTO professores (matricula, nome) VALUES (DEFAULT, 'Augusto Joana');
INSERT INTO professores (matricula, nome) VALUES (DEFAULT, 'Wolverine Mesquita');

/* seleciona dados na tabela professores */
SELECT matricula, nome FROM professores;

SELECT * 
FROM professores
WHERE matricula >= 10
  AND matricula <= 12
/*  matricula BETWEEN 10 AND 12 */
/*
    matricula < 8 
  AND nome like '%Joana%'
*/
;

/* apaga os dados de uma tabela ( MUITO CUIDADO AO USAR E COMO USAR!!!) */
DELETE FROM professores
WHERE matricula = 1;
