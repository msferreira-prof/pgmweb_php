CREATE SCHEMA academia DEFAULT CHARACTER SET utf8 ;
USE academia;

/* tabela */
-- alunos
CREATE TABLE alunos (
  matricula INT(6) NOT NULL AUTO_INCREMENT,
  nome VARCHAR(70) NOT NULL,
  endereco VARCHAR(100) NOT NULL,
  telefone VARCHAR(13) NOT NULL,
  data_nascimento DATE NOT NULL,
  peso FLOAT NOT NULL,
  altura FLOAT NOT NULL,
  PRIMARY KEY (matricula)
)
DEFAULT CHARACTER SET = utf8;

-- atividades
CREATE TABLE atividades (
  codigo INT(11) NOT NULL AUTO_INCREMENT,
  descricao VARCHAR(50) NOT NULL,
  PRIMARY KEY (codigo)
)
DEFAULT CHARACTER SET = utf8;

-- instrutores
CREATE TABLE instrutores (
  rg CHAR(12) NOT NULL,
  nome VARCHAR(70) NOT NULL,
  data_nascimento DATE NOT NULL,
  titulacao VARCHAR(45) NOT NULL,
  PRIMARY KEY (rg)
)
DEFAULT CHARACTER SET = utf8;

-- telefones_instrutor
CREATE TABLE telefones_instrutor (
  instrutor_rg CHAR(12) NOT NULL,
  id_telefone INT(11) NOT NULL AUTO_INCREMENT,
  telefone VARCHAR(13) NOT NULL,
  PRIMARY KEY (id_telefone, instrutor_rg)
)
DEFAULT CHARACTER SET = utf8;

-- indices para as chaves estrangeiras
CREATE INDEX fk_table1_instrutor1_idx ON academia.telefones_instrutor (instrutor_rg ASC);

-- chave estrangeira telefones_instrutor -> PK instrutor
ALTER TABLE telefones_instrutor
ADD CONSTRAINT fk_table1_instrutor1
    FOREIGN KEY (instrutor_rg)
    REFERENCES academia.instrutores (rg)
;

-- turmas
CREATE TABLE turmas (
  numero CHAR(3) NOT NULL,
  horario TIME NOT NULL,
  data_inicial DATE NOT NULL,
  data_final DATE NOT NULL,
  qtd_alunos INT(11) NOT NULL,
  atividades_codigo INT(11) NOT NULL,
  instrutores_rg CHAR(12) NOT NULL,
  PRIMARY KEY (numero)
)
DEFAULT CHARACTER SET = utf8;

-- indices para as chaves estrangeiras
CREATE INDEX fk_turmas_atividades1_idx ON academia.turmas (atividades_codigo ASC);
CREATE INDEX fk_turmas_instrutores1_idx ON academia.turmas (instrutores_rg ASC);

-- chaves estrangeiras 
-- turmas_atividades -> PK atividades
-- turmas_atividades -> PK instrutores
ALTER TABLE turmas_atividades
ADD CONSTRAINT fk_turmas_atividades1
    FOREIGN KEY (atividades_codigo)
    REFERENCES academia.atividades (codigo),
ADD CONSTRAINT fk_turmas_instrutores1
    FOREIGN KEY (instrutores_rg)
    REFERENCES academia.instrutores (rg)
;

-- turmas_alunos
CREATE TABLE turmas_alunos (
  turmas_numero CHAR(3) NOT NULL,
  alunos_matricula INT(6) NOT NULL,
  data_matricula DATE NOT NULL,
  qtd_ausencias INT(3) NOT NULL DEFAULT 0,
  monitor CHAR(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (turmas_numero, alunos_matricula)
)
DEFAULT CHARACTER SET = utf8;

-- indices para as chaves estrangeiras
CREATE INDEX fk_turmas_has_alunos_alunos1_idx ON academia.turmas_alunos (alunos_matricula ASC);
CREATE INDEX fk_turmas_has_alunos_turmas1_idx ON academia.turmas_alunos (turmas_numero ASC);

-- chaves estrangeiras 
-- turmas_alunos -> PK alunos_matricula
-- turmas_alunos -> PK turmas_numero
ALTER TABLE turmas_alunos
ADD CONSTRAINT fk_turmas_has_alunos_alunos1
    FOREIGN KEY (alunos_matricula)
    REFERENCES academia.alunos (matricula),
ADD CONSTRAINT fk_turmas_has_alunos_turmas1
    FOREIGN KEY (turmas_numero)
    REFERENCES academia.turmas (numero)
;

