// PREPAR SERVICE
function preparService($http) {
    return {
        get : function() {
            return $http.get('/prepars');
        },
        update : function(id, data){
            return $http.put('/prepars/' + id, data);
        },
        create : function(data) {
            return $http.post('/prepars', data);
        },
        delete : function(id) {
            return $http.delete('/prepars/' + id);
        }
    }
};
