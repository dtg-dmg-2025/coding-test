import { useBlockProps } from '@wordpress/block-editor';

export default function save() {
	return (
		<p { ...useBlockProps.save() }>
			{ 'Read More (DMG) – hello from the saved content!' }
		</p>
	);
}
