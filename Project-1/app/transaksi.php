<?php
    class transaksi {
        private $conn;
        private $table_name = "transactions";

        public $user_id;
        public $game_id;
        public $amount;
        public $transaction_date;

        public function __construct($db){
            $this->conn = $db;
        }

        // Tampilkan data semua transaksi
        public function index(){
            $query = "SELECT * FROM {$this->table_name}";
            $data = $this->conn->prepare($query);
            $data->execute();
            return $data;
        }

        // Tampilkan halaman create
        public function create(){
            header("Location: create.php");
            exit();
        }

        // Tambah produk ke database
        public function store(){
            $query = "INSERT INTO {$this->table_name} 
                    (user_id, game_id, amount, transaction_date) 
                    VALUES (?, ?, ?, ?)
                    ";
            $data = $this->conn->prepare($query);
        
            $data->execute([
                $this->user_id, 
                $this->game_id, 
                $this->amount, 
                $this->transaction_date, 
                $this->id,  
            ]);
        
            return $data->rowCount() > 0;
        }

        // Tampilkan halaman edit
        public function edit(){
            $query = "SELECT * FROM {$this->table_name} WHERE id = ?";
            $data = $this->conn->prepare($query);
            $data->execute([$this->id]);
            return $data;
        }

        // Update produk ke database
        public function update(){
            $query = "UPDATE {$this->table_name} 
                     SET user_id=?, SET  game_id=?, SET  amount=?, SET  transaction_date=?
                    WHERE id=?";
            $data = $this->conn->prepare($query);
        
            $data->execute([
                $this->user_id, 
                $this->game_id, 
                $this->amount, 
                $this->transaction_date, 
                $this->id, 
            ]);
        
            return $data->rowCount() > 0;
        }

        // Hapus produk dari database
        public function delete(){
            $query = "DELETE FROM {$this->table_name} WHERE id = ?";
            $data = $this->conn->prepare($query);
            $data->execute([$this->id]);
        
            return $data->rowCount() > 0;
        }
    }
?>