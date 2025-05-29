// assets/js/blocks/legal-revision-log.js
import { registerBlockType } from '@wordpress/blocks';
import { ServerSideRender } from '@wordpress/server-side-render';

registerBlockType('aurora/legal-revision-log', {
    title: 'Revision Log (Legal)',
    icon: 'list-view',
    category: 'widgets',
    description: 'Shows last updated date and revision log for legal pages.',
    supports: {
        html: false,
    },
    edit: () => {
        return <ServerSideRender block="aurora/legal-revision-log" />;
    },
    save: () => null // Rendered server-side
});
