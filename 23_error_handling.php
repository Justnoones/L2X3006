<?php

    // public function getMessage();                 // Exception message 
    // public function getCode();                    // User-defined Exception code
    // public function getFile();                    // Source filename
    // public function getLine();                    // Source line
    // public function getTrace();                   // An array of the backtrace()
    // public function getTraceAsString();           // Formated string of trace

    class LessThanZero extends Exception { }
    class LessThanTen extends Exception { }
    class LessThanFifty extends Exception { }

    $x = 50;

    try {
        if ($x <= 0) {
            throw new LessThanZero("Error : x msust be greater than 0", 600);
        } elseif ($x <= 10) {
            throw new LessThanTen("Error : x msust be greater than 10", 610);
        } elseif ($x <= 50) {
            throw new LessThanFifty("Error : x msust be greater than 10", 650);
        } else {
            echo $x;
        }
    } catch (LessThanZero $e) {
        echo "Error at line : " . $e->getLine();
    } catch (LessThanTen $e) {
        echo "Error at : " . $e->getFile();
    } catch (LessThanFifty $e) {
        echo $e->getMessage();
    } catch(Exception $e) {
        echo $e->getCode();
    } finally {
        return "Done";
    }

?>