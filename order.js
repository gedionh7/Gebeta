
{/* <script type='text/JavaScript'>  */}
            // Make a request for a user with a given ID
            function sendOrder (items) { 
                console.log("order served",items)
           axios.get(`http://192.168.8.167:5000/?order_id=12121&user_id=34435&total_cost=234535&items=${items}`)
             .then(function (response) {
               // handle success
               console.log(response);
             })
             .catch(function (error) {
               // handle error
               console.log(error)
             })
             .then(function () {
               // always executed
             });
           }
           
                // </script>