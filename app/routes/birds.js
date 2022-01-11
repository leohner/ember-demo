import Route from '@ember/routing/route';
import { inject as service } from '@ember/service';

export default class BirdsRoute extends Route {
  @service store;

  async model() {
    return this.store.findAll('bird');
    /*
    let response = await fetch('/api/birds.json');
    let { data } = await response.json();

    return data.map((model) => {
      let status = model.conservationStatus;
      let statusColor;
      let canFly;

      switch (status) {
        case 'Least Concern':
          statusColor = 'darkgreen';
          break;

        case 'Conservation Dependent':
          statusColor = 'lightgreen';
          break;

        case 'Near Threatened':
          statusColor = 'greenyellow';
          break;

        case 'Vulnerable':
          statusColor = '#ffc40c';
          break;

        case 'Endangered':
          statusColor = 'orangered';
          break;

        case 'Critically Endangered':
          statusColor = '#cb410b';
          break;

        case 'Extinct in the Wild':
          statusColor = 'red';
          break;

        case 'Extinct':
          statusColor = 'darkred';
          break;

        default:
          statusColor = 'gray';
      }

      if (model.canFly) {
        canFly = 'Yes, this bird can fly.';
      } else {
        canFly = "No, this bird can't fly.";
      }

      return { model, statusColor, canFly };
    });
    */
  }
}
