USE academia;

/* atividades */
INSERT INTO atividades (descricao) VALUES ('Artes');
INSERT INTO atividades (descricao) VALUES ('Robótica');
INSERT INTO atividades (descricao) VALUES ('Esporte');
INSERT INTO atividades (descricao) VALUES ('Concurso Público');
INSERT INTO atividades (descricao) VALUES ('Vestibular');

/* alunos */
INSERT INTO alunos (nome, endereco, telefone, data_nascimento, peso, altura)
VALUES ('Rui Santos', 'Rua das Marrecas 45 - Centro - Rio de Janeiro - RJ', '21-2652-6939', '1993-08-25', 93, 1.89);
INSERT INTO alunos (nome, endereco, telefone, data_nascimento, peso, altura)
VALUES ('Josefina Klein', 'Rua da Passagem 65 - Botafogo - Rio de Janeiro - RJ', '21-98789-6900', '1999-01-05', 54, 1.62);
INSERT INTO alunos (nome, endereco, telefone, data_nascimento, peso, altura)
VALUES ('Maria Julia Vergara', 'Rua Barata Ribeiro 34 - Copacabana - Rio de Janeiro - RJ', '21-8976-2652', '1999-02-02', 51, 1.57);
INSERT INTO alunos (nome, endereco, telefone, data_nascimento, peso, altura)
VALUES ("Joana D'Arc Schultz", 'Rua Juliano de Miranda 124 - Vicente de Carvalho - Rio de Janeiro - RJ', '21-2231-5469', '2005-10-12', 49, 1.52);
INSERT INTO alunos (nome, endereco, telefone, data_nascimento, peso, altura)
VALUES ('Estevão Perfeito', 'Rua Quintino Bocaiúva 86 - Quintino - Rio de Janeiro - RJ', '21-8975-6324', '2001-11-21', 82, 1.85);
INSERT INTO alunos (nome, endereco, telefone, data_nascimento, peso, altura)
VALUES ('Caio Martins Peralva', 'Rua Jarbas Honesto 47 - Campo Grande - Rio de Janeiro - RJ', '21-9875-4124', '2002-07-11', 78, 1.77);

/* instrutores */
INSERT INTO instrutores (rg, nome, data_nascimento, titulacao)
VALUES ('01239800-9', 'Diogo José Silva', '1999-07-11', 'Mestre em Artes Gráficas');
INSERT INTO instrutores (rg, nome, data_nascimento, titulacao)
VALUES ('98769856-1', 'Jacques Sesmarias', '1978-04-25', 'Mestre em Robótica');
INSERT INTO instrutores (rg, nome, data_nascimento, titulacao)
VALUES ('02874598-6', 'Maiara Egídio', '1969-03-31', 'Pósgradução em Matemática para Concursos');
INSERT INTO instrutores (rg, nome, data_nascimento, titulacao)
VALUES ('87956698-5', 'Vânia Estrada', '1978-06-17', 'Pósgraduação em Docência para Vestibular');

/* telefones instrutores */
INSERT INTO telefones_instrutor (instrutor_rg, telefone)
VALUES ('87956698-5', '21-9856-6312');
INSERT INTO telefones_instrutor (instrutor_rg, telefone)
VALUES ('87956698-5', '21-5629-3698');
INSERT INTO telefones_instrutor (instrutor_rg, telefone)
VALUES ('98769856-1', '21-2563-4114');
INSERT INTO telefones_instrutor (instrutor_rg, telefone)
VALUES ('02874598-6', '21-5963-4748');

/* turmas */
INSERT INTO turmas (numero, horario, data_inicial, data_final, qtd_alunos, atividades_codigo, instrutores_rg)
VALUES ('101', '20:00', '2021-03-02', '2021-06-01', 2, 2, '87956698-5');
INSERT INTO turmas (numero, horario, data_inicial, data_final, qtd_alunos, atividades_codigo, instrutores_rg)
VALUES ('102', '10:00', '2021-04-01', '2021-05-16', 2, 3, '98769856-1');
INSERT INTO turmas (numero, horario, data_inicial, data_final, qtd_alunos, atividades_codigo, instrutores_rg)
VALUES ('201', '18:00', '2021-06-05', '2021-12-07', 2, 3, '02874598-6');

/* turmas_alunos */
-- turma 101
INSERT INTO turmas_alunos (turmas_numero, alunos_matricula, data_matricula, qtd_ausencias, monitor) 
VALUES ('101', 1, '2021-02-10', 0, 'S');
INSERT INTO turmas_alunos (turmas_numero, alunos_matricula, data_matricula, qtd_ausencias, monitor) 
VALUES ('101', 3, '2021-02-10', 0, 'N');

-- turma 102
INSERT INTO turmas_alunos (turmas_numero, alunos_matricula, data_matricula, qtd_ausencias, monitor) 
VALUES ('102', 2, '2021-02-10', 0, 'S');
INSERT INTO turmas_alunos (turmas_numero, alunos_matricula, data_matricula, qtd_ausencias, monitor) 
VALUES ('102', 4, '2021-02-10', 0, 'N');
INSERT INTO turmas_alunos (turmas_numero, alunos_matricula, data_matricula, qtd_ausencias, monitor) 
VALUES ('102', 5, '2021-02-10', 0, 'N');

-- 201
INSERT INTO turmas_alunos (turmas_numero, alunos_matricula, data_matricula, qtd_ausencias, monitor) 
VALUES ('201', 2, '2021-02-10', 0, 'N');
INSERT INTO turmas_alunos (turmas_numero, alunos_matricula, data_matricula, qtd_ausencias, monitor) 
VALUES ('201', 6, '2021-02-10', 0, 'S');

