export const fetchCategorias = async () => {
    try {
      const response = await fetch("http://arci.com.ve/api-rest/get_all_categories.php");
      const data = await response.json();
    //   console.log(data);
      return data;
    } catch (error) {
      console.log(error);
    }

};