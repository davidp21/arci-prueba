export const fetchCategorias = async () => {
    try {
      const response = await fetch("http://192.168.3.10/API_REST/example1/api-rest/get_all_categories.php");
    //   const response = await fetch("http://arci.com.ve/API_REST/example1/api-rest/get_all_categories.php");
      const data = await response.json();
    //   console.log(data);
      return data;
    } catch (error) {
      console.log(error);
    }

};