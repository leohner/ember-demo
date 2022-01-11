import Model, { attr } from '@ember-data/model';

export default class BirdModel extends Model {
    @attr('string') url;
    @attr('string') commonName;
    @attr('string') scientificName;
    @attr('string') description;
    @attr('string') canFly;
    @attr('string') conservationStatus;
    @attr('string') image;
}
