USE lista_chamadas;

/* professores */
INSERT INTO professores (matricula, nome) VALUES (DEFAULT, 'Jacques Fontain');
INSERT INTO professores (matricula, nome) VALUES (DEFAULT, 'Mario Zimmerman');
INSERT INTO professores (matricula, nome) VALUES (DEFAULT, 'Carlton Banks');
INSERT INTO professores (matricula, nome) VALUES (DEFAULT, 'William Smithson');
INSERT INTO professores (matricula, nome) VALUES (DEFAULT, 'Jonas Santos');

/* turmas */
INSERT INTO turmas (codigo, serie, sala, hora_inicial, hora_final, professores_matricula) VALUES ('T01', '2a.', 101, '08:00', '12:00', 1);
INSERT INTO turmas (codigo, serie, sala, hora_inicial, hora_final, professores_matricula) VALUES ('T02', '3a.', 102, '08:00', '12:00', 2);
INSERT INTO turmas (codigo, serie, sala, hora_inicial, hora_final, professores_matricula) VALUES ('T03', '2a.', 101, '13:00', '17:00', 3);
INSERT INTO turmas (codigo, serie, sala, hora_inicial, hora_final, professores_matricula) VALUES ('T04', '4a.', 301, '08:00', '12:00', 4);

/* alunos */
INSERT INTO alunos (matricula, nome, turmas_codigo) VALUES (DEFAULT, 'Rui Santos'          , 'T01');
INSERT INTO alunos (matricula, nome, turmas_codigo) VALUES (DEFAULT, 'Josefina Klein'      , 'T01');
INSERT INTO alunos (matricula, nome, turmas_codigo) VALUES (DEFAULT, 'Maria Julia Vergara' , 'T01');
INSERT INTO alunos (matricula, nome, turmas_codigo) VALUES (DEFAULT, "Joana D'Arc Schultz" , 'T02');
INSERT INTO alunos (matricula, nome, turmas_codigo) VALUES (DEFAULT, 'Estevão Perfeito'    , 'T02');
INSERT INTO alunos (matricula, nome, turmas_codigo) VALUES (DEFAULT, 'Caio Martins Peralva', 'T03');
INSERT INTO alunos (matricula, nome, turmas_codigo) VALUES (DEFAULT, 'Julia Martins'       , 'T03');
INSERT INTO alunos (matricula, nome, turmas_codigo) VALUES (DEFAULT, 'Marta Goncalves'     , 'T04');

select * from professores;
select * from turmas;
select * from alunos;