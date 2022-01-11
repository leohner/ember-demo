import Route from '@ember/routing/route';

export default class BirdRoute extends Route {
  async model(params) {
    let response = await fetch(`/api/birds/${params.bird_id}.json`);
    let { data } = await response.json();

    let {
      id,
      commonName,
      scientificName,
      description,
      canFly,
      conservationStatus,
      image,
    } = data;

    if (canFly) {
      canFly = 'Yes';
    } else {
      canFly = 'No';
    }

    return {
      id,
      commonName,
      scientificName,
      description,
      canFly,
      conservationStatus,
      image,
    };
  }
}
