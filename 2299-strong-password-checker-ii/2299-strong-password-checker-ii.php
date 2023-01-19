class Solution {

    /**
     * @param String $password
     * @return Boolean
     */
    function strongPasswordCheckerII($password) {

        $validate = ['/[a-z]+/',
                     '/[A-Z]+/',
                     '/[0-9]+/',
                     '/[!@#\$%\^&\*\(\)\-\+]+/',
                    ];
        
        foreach($validate as $v){
            if(!preg_match($v,$password)){
                return false;
            }            
        }
        
        if(strlen($password) < 8){
            return false;
        }
        if(preg_match('/(.)\1+/',$password)){
            return false;
        }          
        return true;
    }
}