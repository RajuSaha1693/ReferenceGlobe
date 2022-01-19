<?php
    include_once('core_class.php');
    
    class Employee{

        public function get_employee($search=null,$page_no){
            $core = Core::getInstance();
            $sql='SELECT * from employee_table 
            WHERE name LIKE :keyword 
            OR email LIKE :keyword 
            OR mobile_no LIKE :keyword 
            ORDER BY id DESC';

            $per_page_html = '';
            $page = 1;
            $start=0;

            if(!empty($page_no)) {
                $page = $page_no;
                $start=($page-1) * ROW_PER_PAGE;
            }

            $limit=" LIMIT " . $start . "," . ROW_PER_PAGE;
            $stmt = $core->dbh->prepare($sql);
            $stmt->bindValue(':keyword', '%' . $search . '%', PDO::PARAM_STR);
            $stmt->execute();
            $row_count = $stmt->rowCount();

            if(!empty($row_count)){
                $per_page_html .= "<div style='text-align:center;margin:20px 0px;'>";
                $page_count=ceil($row_count/ROW_PER_PAGE);
                if($page_count>1) {
                    for($i=1;$i<=$page_count;$i++){
                        if($i==$page){
                            $per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="button-page current" />';
                        } else {
                            $per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="button-page" />';
                        }
                    }
                }
                $per_page_html .= "</div>";
            }

            $query = $sql.$limit;
            $get_stmt = $core->dbh->prepare($query);
            $get_stmt->bindValue(':keyword', '%' . $search . '%', PDO::PARAM_STR);
            $get_stmt->execute();
            $result = $get_stmt->fetchAll();

            $data[0]=$per_page_html;
            $data[1]=$result;

            return $data;
        }

    }
    
?>