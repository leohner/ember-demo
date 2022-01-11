import Component from '@glimmer/component';
import { tracked } from '@glimmer/tracking';
import { action } from '@ember/object';

export default class BirdButtonComponent extends Component {
  @tracked isClicked = false;
  @tracked numClicks = 0;

  @action toggleDisplay() {
    // if clicking the button...
    if (!this.isClicked) {
      this.numClicks++;
    }

    // switch the state
    this.isClicked = !this.isClicked;
  }
}
