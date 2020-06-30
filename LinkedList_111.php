<?php

    class ListNode {
        public $data = null;
        public $next = null;

        public function __construct($data) {
            $this->data = $data;
        }

    }


    class LinkList {
        private $_firstNode = null;
        private $_totalNode = 0;

        public function insert($data) {
            $newNode = new ListNode($data);

            if($this->_firstNode === null) {
                $this->_firstNode = $newNode;
            } else {
                $currentNode = $this->_firstNode;
                while($currentNode->next !== null) {
                    $currentNode = $currentNode->next;
                }
                $currentNode->next = $newNode;
            }

            $this->_totalNode++;
            return true;
        }

        public function display() {
            echo "Total book titles: " . $this->_totalNode . "<br>";
            $currentNode = $this->_firstNode;
            while($currentNode !== null) {
                echo $currentNode->data . "<br>";
                $currentNode = $currentNode->next;
            }
        }

        public function insertAtFirst(string $data = NULL) { 
            $newNode = new ListNode($data); 
            if ($this->_firstNode === NULL) {             
                $this->_firstNode = &$newNode;             
            } else { 
                $currentFirstNode = $this->_firstNode; 
                $this->_firstNode = &$newNode; 
                $newNode->next = $currentFirstNode;            
            } 
            $this->_totalNode++; 
            return TRUE; 
        } 

    }   

    $bookTitles = new Linklist();

    $bookTitles->insert("tieu de 1");
    $bookTitles->insert("tieu de 2");
    $bookTitles->insert("tieu de 3");
    $bookTitles->insert("tieu de 5");
    $bookTitles->insert("tieu de 6");

    $bookTitles->display();

    $bookTitles->insertAtFirst("tieu de 7");
    $bookTitles->display();