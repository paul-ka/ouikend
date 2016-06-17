// ACTIVITYS SERVICE
function activityService($http) {
    return {
        get : function() {
            return $http.get('./activity.json');
        },
        update : function(id, data){
            return $http.put('/activitys/' + id, data);
        },
        create : function(data) {
            return $http.post('/activitys', data);
        },
        delete : function(id) {
            return $http.delete('/activitys/' + id);
        }
    }
};
