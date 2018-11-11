import Axios from 'axios';

let baseURL = 'https://europe-west1-cbpor2.cloudfunctions.net';

export default {
    postContactForm(data) {
        return Axios.post(baseURL + "/addMessage", data)
        .then(res => {
            return res;
        })
        .catch(res => {
            return res.status = null;
        });
    },
    getPosts() {
        return Axios.get(baseURL + "/posts").then(res => {
          return res.data;
        });
    },
    getPost(id) {
        return Axios.get(baseURL + "/posts/" + id).then(res => {
            console.log(`request sent, response returned: ${res}`);
            return res.data;
        });
    }
}