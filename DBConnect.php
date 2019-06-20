<?php
class DbConnect
{
    const host = 'localhost';
    const user = 'sfood';
    const pass = '18021997';
    const db='qlchathh';
    private $link;


    public function __construct()
    {
        
        $this->link = new mysqli(self::host, self::user, self::pass, self::db);
        if( mysqli_connect_errno())
            echo "Loi";
    }
    
     public function __destruct()
    {
          
        $link = NULL;
    }
    
    
    public function query($query) 
    {
  
        return $this->link->query($query);
    }
    
   
    public function ThemChat($tenhoahoc, $tenchat,$loaichat, $mota, $anh) 
    {
        $query5 = "INSERT INTO `chathoahoc`(`TenHoaHoc`, `TenChat`,`LoaiChat`, `MoTa`, `HinhAnh`) VALUES (?,?,?,?,?)";
        $stmt5 = $this->link->prepare($query5);
        $stmt5->bind_param('ssiss', $tenhoahoc, $tenchat, $loaichat, $mota, $anh);
        return $stmt5->execute();
    }
    
     public function ThemLoaiChat($tenchat,  $mota) 
    {
        $query5 = "INSERT INTO `loaichathoahoc`(`TenLoai`,`MoTa`) VALUES (?,?)";
        $stmt5 = $this->link->prepare($query5);
        $stmt5->bind_param('ss', $tenchat,  $mota);
        return $stmt5->execute();
    }
    
    public function ThemLoaiPhanUng($tenloaipu,  $mota) 
    {
        $query5 = "INSERT INTO `loaiphanung`(`TenLoaiPhanUng`,`MoTa`) VALUES (?,?)";
        $stmt5 = $this->link->prepare($query5);
        $stmt5->bind_param('ss', $tenloaipu,  $mota);
        return $stmt5->execute();
    }
    
    public function ThemPhanUng($chat1, $chat2,$sp1, $sp2, $loaipu, $anh) 
    {
        $query5 = "INSERT INTO `phanung`(`ChatThamGia1`, `ChatThamGia2`, `ChatSanPham1`, `ChatSanPham2`, `LoaiPhanUng`, `HinhAnh`) VALUES (?,?,?,?,?,?)";
        $stmt5 = $this->link->prepare($query5);
        $stmt5->bind_param('ssssis', $chat1, $chat2,$sp1, $sp2, $loaipu, $anh);
        return $stmt5->execute();
    }
    
   
}
?>


