<?php
require_once("connection.php");

Class Transcripts {

  static public function createTranscript($sesionId,$source,$intent,$raw = ''){

    $rawContent = json_encode($raw);

    if(is_array($intent)){
      $intentName = $intent[0];
    } else {
      $intentName = $intent;
    }

    if(is_array($rawContent)){
      $raw = $rawContent[0];
    } else {
      $raw = $rawContent;
    }

    $sql =  "INSERT INTO `Transcripts` (transcript_sessionId,transcript_intent,transcript_body,transcript_source) VALUES (:transcript_sessionId,:transcript_intent,:transcript_body,:transcript_source)";
    $stmt = Connection::connect()->prepare($sql);
    $stmt->bindParam(":transcript_sessionId",$sesionId, PDO::PARAM_STR);
    $stmt->bindParam(":transcript_source",$source, PDO::PARAM_STR);
    $stmt->bindParam(":transcript_intent",$intentName, PDO::PARAM_STR);
    $stmt->bindParam(":transcript_body",$raw, PDO::PARAM_STR);
    return $stmt->execute();
    $stmt->close();
    $stmt =  null;
  }

  //
  // static public function getTranscript($sesionId){
  //   $sql =  "SELECT * FROM `Transcript` WHERE `transcript_sessionId` LIKE :transcript_sessionId ORDER BY 'transcript_id' DESC";
  //   $stmt = Connection::connect()->prepare($sql);
  //   $stmt->bindParam(":transcript_sessionId",$sesionId, PDO::PARAM_STR);
  //   $stmt->execute();
  //   return $stmt->fetchAll(PDO::FETCH_ASSOC);
  //   $stmt->close();
  //   $stmt =  null;
  // }



}

?>
