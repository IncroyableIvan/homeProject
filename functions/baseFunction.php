<?php

function getAllWorkers()
{
  $db = new PDO('mysql:host=localhost;dbname=company', 'root', '');
  $workers = $db->prepare('SELECT id, name, last_name, status, mail FROM workers');
  $workers->execute();
  return $workers->fetchAll();
}

function getAllWorkTime()
{
  $db = new PDO('mysql:host=localhost;dbname=company', 'root', '');
  $workTime = $db->prepare('SELECT w.id, w.name, w.last_name, wt.jour, wt.work_time FROM working_time wt, workers w  where w.id = wt.id_worker');
  $workTime->execute();
  return $workTime->fetchAll();
}

function addNewWorker($workerData)
{
  $db = new PDO('mysql:host=localhost;dbname=company', 'root', '');
  $newWorker = $db->prepare('INSERT INTO company . workers (name, last_name, status, mail) VALUES ( :name, :last_name, :status, :mail)');
  $newWorker->bindParam(':name', $workerData['name']);
  $newWorker->bindParam(':last_name', $workerData['last_name']);
  $newWorker->bindParam(':status', $workerData['status']);
  $newWorker->bindParam(':mail', $workerData['mail']);
  $newWorker->execute();
}

function addNewWorkTime($working_timeData)
{
  $db = new PDO('mysql:host=localhost;dbname=company', 'root', '');
  $newWorkTime = $db->prepare('INSERT INTO working_time (id_worker, jour, work_time) VALUES (:id_worker, :jour, :work_time)');
  $newWorkTime->bindParam(':id_worker', $working_timeData['id_work']);
  $newWorkTime->bindParam(':jour', $working_timeData['jour']);
  $newWorkTime->bindParam(':work_time', $working_timeData['work_time']);
  $newWorkTime->execute();
}

function updateWorker($workerData)
{
  $db = new PDO('mysql:host=localhost;dbname=company', 'root', '');
  $workers = $db->prepare('UPDATE company . workers
    SET name = :name,
    last_name = :last_name,
    status = :status,
    mail = :mail
    WHERE id = :id');
  $workers->bindParam(':name', $workerData['name']);
  $workers->bindParam(':last_name', $workerData['last_name']);
  $workers->bindParam(':status', $workerData['status']);
  $workers->bindParam(':mail', $workerData['mail']);
  $workers->bindParam(':id', $workerData['id']);
  $workers->execute();
}

function updateWorkTime($working_timeData)
{
  $db = new PDO('mysql:host=localhost;dbname=company', 'root', '');
  $workTime = $db->prepare('UPDATE working_time
    SET  work_time = :work_time
    WHERE id_worker = :id_worker AND jour = :jour');
  $workTime->bindParam(':jour', $working_timeData['jour']);
  $workTime->bindParam(':work_time', $working_timeData['work_time']);
  $workTime->bindParam(':id_worker', $working_timeData['id_worker']);
  $result = $workTime->execute();
  echo $result == true;

}

function deleteWorkers($registreW)
{
  $db = new PDO('mysql:host=localhost;dbname=company', 'root', '');
  $deleteW = $db->prepare('DELETE FROM workers WHERE id = :id');
  $deleteW->bindParam(':id', $registreW['id']);
  $deleteW->execute();
}

function deleteWorkTime($registreWT)
{
  $db = new PDO('mysql:host=localhost;dbname=company', 'root', '');
  $deleteWT = $db->prepare('DELETE FROM working_time WHERE id_worker = :idworker AND jour = :datew');
  $deleteWT->bindParam(':idworker', $registreWT['idworker']);
  $deleteWT->bindParam(':datew', $registreWT['datew']);
  $deleteWT->execute();
}

function getWorker($idworker){
  $db = new PDO('mysql:host=localhost;dbname=company', 'root', '');
  $worker = $db->prepare('SELECT id, name, last_name, status, mail FROM workers where id = :id');
  $worker->bindParam(':id', $idworker);
  $worker->execute();
  return $worker->fetch();
}

function getWorkingTime($idworker, $datewt){
  $db = new PDO('mysql:host=localhost;dbname=company', 'root', '');
  $workingTime = $db->prepare('SELECT w.id, w.name, w.last_name, wt.jour, wt.work_time FROM working_time wt, workers w  where w.id = wt.id_worker AND w.id = :idw AND wt.jour = :jour ');
  $workingTime->bindParam(':idw', $idworker);
  $workingTime->bindParam(':jour', $datewt);
  $workingTime->execute();
  return $workingTime->fetch();
}

?>
