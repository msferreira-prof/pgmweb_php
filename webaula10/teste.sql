SELECT *
FROM professores;

-- @BLOCK
INSERT INTO professores
(matricula, nome)
VALUES 
(DEFAULT, '''Carolina Castro''');

-- @BLOCK
DELETE FROM professores;