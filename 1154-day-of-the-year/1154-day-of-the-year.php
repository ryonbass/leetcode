class Solution {

    /**
     * @param String $date
     * @return Integer
     */
    function dayOfYear($date) {
        $ymd = explode('-',$date);

        if(((int)$ymd[0] % 4 == 0)&&((int)$ymd[0] % 100 != 0)){
            $feb = 29;
        }elseif((int)$ymd[0] % 400 == 0){
            $feb = 29;
        }else{
            $feb = 28;
        }
        
        for($i=1;$i<(int)$ymd[1];$i++){
            if(($i==1)||($i==3)||($i==5)||($i==7)||($i==8)||($i==10)||($i==12)){
                $ret += 31;
            }elseif(($i==4)||($i==6)||($i==9)||($i==11)){
                $ret += 30;
            }else{
                $ret += $feb;
            }
        }
        
        $ret += (int)$ymd[2];
        return $ret;
    }
}