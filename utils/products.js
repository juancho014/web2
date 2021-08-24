const request = require('postman-request');

const getAllJuegos = (callback) => {
    request('https://juegos-consolas-web.herokuapp.com/juegos', (error, res, body) => {
        if(error){
          console.log('Error', error)  
          return callback(error, undefined);
        }
        if (res){
            if(body){
               return callback(undefined, body);
            }
            callback("No se encontraron productos.", undefined);
        }
    });
}


module.exports= {
 
  getAllJuegos

}
