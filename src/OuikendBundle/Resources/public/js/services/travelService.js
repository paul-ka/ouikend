// TRAVEL SERVICE
function travelService($http) {
    return {
        get : function() {
            return $http.get('./trips.json');
        },
        update : function(id, data){
            return $http.put('/travels/' + id, data);
        },
        create : function(data) {
            return $http.post('/travels', data);
        },
        delete : function(id) {
            return $http.delete('/travels/' + id);
        }
    }
};
