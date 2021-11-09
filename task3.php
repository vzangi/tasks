<?php

/*

1. SELECT * FROM a, b  WHERE a.id=b.a_id;
2. SELECT * FROM a JOIN b ON a.id=b.a_id;

В первом запросе происходит CROSS JOIN, который затем фильтруется в операторе WHERE
А во втором запросе выполняется INNER JOIN с уловием указнным после ON

По сути запросы возвращают одинаковый набор данных
*/